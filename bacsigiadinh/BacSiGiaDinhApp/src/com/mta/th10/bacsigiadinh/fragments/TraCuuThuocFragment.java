package com.mta.th10.bacsigiadinh.fragments;

import java.util.ArrayList;
import java.util.List;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.GroupItemAdapter;
import com.mta.th10.bacsigiadinh.db.MyDB;
import com.mta.th10.bacsigiadinh.db.ThuocDB;
import com.mta.th10.bacsigiadinh.fragments.sub.DanhSachThuocFragment;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.NhomThuoc;
import android.widget.ListView;

/**
 * Trang này quản lý việc hiển thị các nhóm thuốc theo thứ tự của nó Nó dùng 1
 * fragment để hiển thị lần lượt các list thuốc
 */
public class TraCuuThuocFragment extends Fragment implements OnItemClickListener, ITitleFragment {

	private List<NhomThuoc> listNhomThuoc;
	public static int count = 3;
	private ThuocDB db;

	public TraCuuThuocFragment() {
		// lây các nhóm ra
		listNhomThuoc = (new ThuocDB()).getAllNhomThuoc();

	}

	public TraCuuThuocFragment(List<NhomThuoc> list) {
		this.listNhomThuoc = list;
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_main_tracuuthuoc, container, false);
		ListView lv = (ListView) v.findViewById(R.id.listview_nhomthuoc);
		GroupItemAdapter adapter = new GroupItemAdapter(getContext(), convertToGroupItem(listNhomThuoc));
		lv.setAdapter(adapter);
		lv.setOnItemClickListener(this);

		return v;
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int p, long arg3) {
		DanhSachThuocFragment f = new DanhSachThuocFragment(this.listNhomThuoc.get(p));
		MainActivity.Current.showFragment(f);

	}

	private List<IGroupItem> convertToGroupItem(List<NhomThuoc> list) {
		List<IGroupItem> l = new ArrayList<IGroupItem>();
		for (NhomThuoc n : list)
			l.add(n);
		return l;
	}

	@Override
	public String getTitle() {
		return "Tra cứu thuốc";
	}

}

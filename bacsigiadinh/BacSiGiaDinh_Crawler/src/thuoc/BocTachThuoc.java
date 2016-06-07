package thuoc;

import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import mta.th10.bacsigiadinh.models.Thuoc;

public class BocTachThuoc {
	public static Document document;
	private static Thuoc thuoc;

	public static void BocTach(Thuoc t) {
		thuoc = t;
		TachDongGoi();
		TachNhomDuocLy();
		ThanhPhan();
		HamLuong();
		ChiDinh();
		ChongChiDinh();
		TuongTacThuoc();
		TacDungPhu();
		DePhong();
		LieuLuong();
		BaoQuan();
	}

	private static void TachDongGoi() {
		try {
			Elements es = document.getElementsByClass("textdetaildrg");
			thuoc.setDongGoi(es.get(2).ownText());
		} catch (Exception e) {
			//System.out.println("TachDongGoi :" + e.getMessage());
		}
	}

	private static void TachNhomDuocLy() {
		try {
			Elements el = document.getElementsByClass("textdetaillink");
			thuoc.setNhomDuocLy(el.get(0).ownText());
		} catch (Exception e) {
			//System.out.println("TachNhomDuocLy :" + e.getMessage());
		}
	}

	private static void ThanhPhan() {
		try {
			Elements el = document.getElementsByClass("texttplink");
			thuoc.setThanhPhan(el.get(0).ownText());
		} catch (Exception e) {
			//System.out.println("ThanhPhan :" + e.getMessage());
		}
	}

	private static void HamLuong() {
		try {
			Elements el = document.getElementsByClass("textdetaildrgI");
			thuoc.setHamLuong(el.get(1).ownText());
		} catch (Exception e) {
			//System.out.println("HamLuong :" + e.getMessage());
		}
	}

	private static void ChiDinh() {
		try {
			Element el = document.getElementById("IndicationbbPlus");
			thuoc.setChiDinh(el.ownText());

		} catch (Exception e) {
			//System.out.println("ChiDinh :" + e.getMessage());
		}
	}

	private static void ChongChiDinh() {
		try {
			Element el = document.getElementById("AntiComccPlus");
			thuoc.setChongChiDinh(el.ownText());
		} catch (Exception e) {
			//System.out.println("ChongChiDinh :" + e.getMessage());
		}
	}

	private static void TuongTacThuoc() {
		try {
			// TtddPlus
			Element el = document.getElementById("TtddPlus");
			thuoc.setTuongTacThuoc(el.ownText());
		} catch (Exception e) {
			//System.out.println("TuongTacThuoc :" + e.getMessage());
		}
	}

	private static void TacDungPhu() {
		try {
			// tdnnnnPlus
			Element el = document.getElementById("tdnnnnPlus");
			thuoc.setTacDungPhu(el.ownText());
		} catch (Exception e) {
			//System.out.println("TacDungPhu :" + e.getMessage());
		}
	}

	private static void DePhong() {
		try {
			// dpnnnnPlus
			Element el = document.getElementById("dpnnnnPlus");
			thuoc.setDePhong(el.ownText());
		} catch (Exception e) {
			//System.out.println("DePhong :" + e.getMessage());
		}
	}

	private static void LieuLuong() {
		try {
			// DossuuuPlus
			Element el = document.getElementById("DossuuuPlus");
			thuoc.setLieuLuong(el.ownText());
		} catch (Exception e) {
			System.out.println("LieuLuong :" + e.getMessage());
		}
	}

	private static void BaoQuan() {
		try {
			// Dossuuu11Plus
			Element el = document.getElementById("Dossuuu11Plus");
			thuoc.setBaoQuan(el.ownText());
		} catch (Exception e) {
			System.out.println("BaoQuan :" + e.getMessage());
		}
	}
}
